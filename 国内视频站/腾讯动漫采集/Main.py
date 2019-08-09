""" 
2019年7月27日 腾讯动漫 视频目录 采集 1.0
"""
#导入需要的类库
import requests
import re
import sys
import time
import pymysql
import random

from bs4 import BeautifulSoup

# 连接数据库
connect = pymysql.Connect(
    host = 'localhost',
    port = 3306,
    user = 'root',
    passwd = 'a1513784',
    db = 'blog',
    charset = 'utf8'
)
# 获取游标
cursor = connect.cursor()

class Main:
    
    user_agent_list = ['Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36',
                       'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.16 Safari/537.36',
                       'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.3319.102 Safari/537.36',
                       'Mozilla/5.0 (X11; CrOS i686 3912.101.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
                       'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
                       'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36',
                       'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:17.0) Gecko/20100101 Firefox/17.0.6',
                       'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36',
                       'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36',
                       'Mozilla/5.0 (X11; CrOS i686 3912.101.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36']
    UserAgent=random.choice(user_agent_list)

    header = {
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
        'Accept-Encoding': 'gzip, deflate, br',
        'Accept-Language': 'zh-CN,zh;q=0.9',
        'Cache-Control': 'max-age=0',
        'Connection': 'keep-alive',
        'Upgrade-Insecure-Requests': '1',
        'User-Agent': UserAgent,
    }
    def getCateID(self):
        for i in range(1,5):
            self.getList(i)
    def getList(self,iarea):
        listpage = 0
        for offset in range(0,10000,30):
            listpage += 1
            #   打开页面
            url = "https://v.qq.com/x/bu/pagesheet/list?_all=1&append=1&channel=cartoon&iarea=" + str(iarea) + "&listpage=" + str(listpage) + "&offset=" + str(offset) + "&pagesize=30&sort=18"
            try:
                r = requests.get(url,headers = self.header)
                print("链接状态：",r.status_code," 地址：",url)
            except Exception as e:
                print("打开链接错误：",e)
                continue           
            #   分析页面内容
            soup = BeautifulSoup(r.content,"html.parser")
            if(soup.find_all('div', {'class': 'list_item'}) == []):
                print('程序采集完成',iarea)
                return
            #   获取列表页面
            for items in soup.find_all('div', {'class': 'list_item'}):
                #   缩略图
                try:
                    pic = items.find('img')['src']
                except Exception as e:
                    print("读取缩略图遇到错误",e)
                    continue
                if(pic == ''):
                    print("没有缩略图 直接跳过")
                    continue
                #   别名
                try:
                    second_title = items.find('div',{'class':'figure_desc'}).text
                except Exception as e:
                    second_title = ""
                #   集数
                try:
                    sets = items.find('div',{'class':'figure_caption'}).text
                except Exception as e:
                    sets = ''
                try:
                    figure_detail = items.find('div',{'class':'figure_detail'})
                except Exception as e:
                    figure_detail = ''
                #   电影名
                try:
                    title = figure_detail.find('a').text
                except Exception as e:
                    title = ''
                #   播放页面地址
                try:
                    href = figure_detail.find('a')['href']
                except Exception as e:
                    href = ''
                title = pymysql.escape_string(str(title))
                print("缩略图地址：",pic," 电影名称：",title," 别名 ",second_title," 播放地址：",href," 集数：",sets)
                #查询重复
                sql = "SELECT id,title,sets_state FROM tp_vcate where title='%s'"
                tdata = (title)
                cursor.execute(sql % tdata)
                updateID = ""
                print("查询到" + str(cursor.rowcount) + "条与标题 " + title +"  一致的数据")
                if(cursor.rowcount > 0):
                    fetch = cursor.fetchone()
                    updateID = fetch[0]
                    updatestate = fetch[2]
                    if(updatestate == 0):
                        try:
                            sql = "UPDATE tp_vcate set title = '%s', second_title = '%s', pic = '%s', sets = '%s', sets_state = '%d', url = '%s',cateid = '%d' where id = '%d'"
                            sets_state = 0
                            matchObj = re.match( r'全(.*)', sets, re.M|re.I)
                            if matchObj:
                                sets_state = 1
                            else:
                                sets_state = 0
                            data = (title, second_title, pic, sets, sets_state, href, iarea + 1,updateID)
                            cursor.execute(sql % data)
                            connect.commit()
                        except Exception as e:
                            print(e)
                            continue     
                        continue
                else:
                    # 插入数据
                    try:
                        sql = "INSERT INTO tp_vcate (title, second_title, pic, sets, sets_state, url ,cateid) \
                            VALUES ( '%s', '%s','%s','%s','%d','%s' ,'%d')"
                        sets_state = 0
                        matchObj = re.match( r'全(.*)', sets, re.M|re.I)
                        if matchObj:
                            sets_state = 1
                        else:
                            sets_state = 0
                        data = (title, second_title, pic, sets, sets_state, href, iarea + 1)
                        cursor.execute(sql % data)
                        connect.commit()
                    except Exception as e:
                        print(e)
                        continue     


if __name__ == "__main__":

    main = Main()
    main.getCateID()

# 关闭连接
cursor.close()
connect.close()