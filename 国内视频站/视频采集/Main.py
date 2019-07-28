'''
2019-03-03

'''
#导入需要的类库
import requests
import re
import sys
import time
import PySql
 
from bs4 import BeautifulSoup
from selenium import webdriver

connect = PySql.connect
cursor = PySql.cursor
header = PySql.header
phone_header = PySql.phone_header

#   视频来源
laiyuan = '腾讯视频'

#   视频分类
shipinfenlei = ''
#   每页显示个数
pagesize = str(24)

class MyClass:

    def __init__(self):
        pass

    #   循环视频分类
    def forChannel(self):

        # 查询数据
        sql = "SELECT * FROM nav WHERE id > '%d' and leixing_ID <> '%d' "

        data = (0,-1)

        cursor.execute(sql % data)

        for row in cursor.fetchall():

            self.getItype(row)

    #   循环视频类型
    def getItype(self,row):

        shipinfenlei = row[2]
        shipinleixing = row[4]
        channel = row[3]
        itype = row[5]

        for offset in range(0,10000,24):
            #   channel：   电影、电视剧    itype： 剧情、喜剧等    pagesize：  每页显示数目  offset：  开始显示位置    
            url = "https://v.qq.com/x/bu/pagesheet/list?_all=1&append=1&channel="+ channel +"&itype="+ itype + \
                "&listpage=2&offset="+ str(offset) +"&pagesize="+ pagesize +"&sort=18"
            print(url)
            #   打开页面
            r = requests.get(url,headers=header)

            print("链接状态：",r.status_code)
            #   分析页面内容
            soup = BeautifulSoup(r.content, 'lxml')
            #   获取列表页面
            for items in soup.find_all('div', {'class': 'list_item'}):
                #   缩略图
                figure_pic = items.find('img')['src']
                figure_detail = items.find('div',{'class':'figure_detail'})
                #   电影名
                title = figure_detail.find('a').text
                #   播放页面地址
                href = figure_detail.find('a')['href']
                #集数
                try:
                    figure_caption = items.find('div',{'class':'figure_caption'}).text
                except Exception as e:
                    figure_caption = ''
                #   主演
                try:
                    figure_desc = figure_detail.find('div',{'class': 'figure_desc'}).text
                except Exception as e:
                    figure_desc = ''
                #   播放量
                try:
                    figure_count = figure_detail = items.find('div',{'class':'figure_count'}).text
                except Exception as e:
                    figure_count = ''

                print("视频分类：",shipinfenlei,"视频类型",shipinleixing,"figure_pic:",figure_pic,"title:",title,"href:",href,"figure_desc:",figure_desc,"集数：",figure_caption,"figure_count:",figure_count)
                self.getContentPage(href)
                break
                    # try:
                    #     # 插入数据
                    #     sql = "INSERT INTO video (laiyuan, shipinfenlei, shipinleixing,title,figure_pic,figure_desc,figure_count) \
                    #         VALUES ( '%s', '%s','%s','%s','%s','%s','%s', )"

                    #     data = (laiyuan, shipinfenlei, shipinleixing,title,figure_pic,figure_desc,figure_count)

                    #     cursor.execute(sql % data)

                    #     connect.commit()

                    # except Exception as e:

                    #     print(e)
                    #     continue
    def getContentPage(self,url):
        print(url)
        #   打开页面
        r = requests.get(url,headers=phone_header)
        print("链接状态：",r.status_code)
        #   分析页面内容
        soup = BeautifulSoup(r.content, 'lxml')
        #获取简介 与 评分 等信息
        title = soup.find('div',{'class':'video_tit'}).text
        #评分
        score = soup.find('div',{'class':'video_types'}).text
        #演员
        playactor = soup.find('div',{'class':'video_starring'}).text
        #简介
        abstract = soup.find('div',{'class':'detail_txt'}).text
        try:
            wanjie = soup.find('div',{'class':'mod_hd_more'})
        except Exception as e:
            return
        searchObj = re.search( '全\d{1,4}集', wanjie, re.M|re.I)
        if searchObj:
            print ("searchObj.group() : ", searchObj.group(),'已完结')
        else:
            print('正在更新')
        #获取集数
        lis = soup.find('div',{'class':'mod_episodes_numbers'}).find_all('li')
        for itme in lis:
            href = item.find('a')['href']
            t = item.find('a').text

if __name__=="__main__":
    myclass = MyClass()
    myclass.forChannel()

