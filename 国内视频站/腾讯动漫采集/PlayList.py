""" 
2019年7月27日 腾讯动漫 播放列表 采集 1.0
"""
#导入需要的类库
import requests
import re
import sys
import time
import pymysql
import demjson
import json
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

class PlayList:

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
    tuple_list=[]
    vcate_id = ""
    def __init__(self):
        #   查询数据库 未完结数据
        sql = "SELECT * FROM tp_vcate"
        cursor.execute(sql)
        for row in cursor.fetchall():
            self.vcate_id = row[0]
            title = row[1]
            url = row[6]
            #   打开页面
            try:
                r = requests.get(url, headers=self.header, timeout=5)
            except Exception as e:
                f=open('链接打开错误.txt','a')
                f.write('打开连接失败：' + url + '\n')
                f.close()
                print('打开播放页失败:',e)
            if r.status_code != 200:
                f=open('链接打开错误.txt','a')
                f.write('返回错误代码：' + url + str(r.status_code) + '\n')
                f.close()
                print('页面打开错误',str(r.status_code),url)
                continue
            #print("链接状态：",r.status_code)
            r.encoding = 'utf-8'
            #   正则JSON内容
            cover = ''
            searchObj = re.search( 'var COVER_INFO =(.*)',r.text, re.M|re.I)
            if searchObj:
                cover = searchObj.group(1)
            else:
                f=open('链接打开错误.txt','a')
                f.write('没有找到JSON：' + url + '\n')
                f.close()
                print ("没有找到 cover  JSON")
                continue
            try:
                cover_info = demjson.decode(cover)
                self.hasKey(cover_info)
            except Exception as e:
                f=open('json错误.txt','a')
                f.write('解析JSON错误：' + url + '\n')
                f.close()
                print ("解析JSON错误 "+ url  )
                continue
            # return
            #   查询数据库
            sql = "SELECT * FROM tp_pcate where vcate_id = '%s'"
            tdata = (self.vcate_id)
            cursor.execute(sql % tdata)
            updateID = ""
            print(cursor.rowcount)
            if(cursor.rowcount > 0):
                updateID = cursor.fetchone()[0]
                self.tuple_list.append( updateID )
                data = tuple(self.tuple_list)
                print(url,"更新数据",cover_info['series_name'],title)
                sql = "UPDATE tp_pcate set source = '%s', vcate_id = '%d', pageid = '%s', leading_actor_id = '%s', second_title = '%s', publish_date = '%s', current_num = '%s', type_name = '%s', \
                    horizontal_pic_url = '%s', cartoon_age = '%s', area_name = '%s', tag = '%s',doulie_tags = '%s', series_name = '%s', vertical_pic_url = '%s', director_id = '%s', description = '%s', \
                    dialogue = '%s', update_notify_desc = '%s', episode_updated = '%s', score = '%s', nomal_ids = '%s',view_today_count = '%d' where id='%d'" 
                try:
                    cursor.execute(sql % data)
                    connect.commit()
                    continue
                except Exception as e:
                    print("更新数据库失败" ,e)
                    f=open('1.txt','a')
                    f.write(pymysql.escape_string(cover_info['series_name'])+"\n")
                    f.close()
                    continue
            else:
                data = tuple(self.tuple_list)
                #添加数据
                sql = "INSERT INTO tp_pcate(source, vcate_id, pageid, leading_actor_id, second_title, publish_date, current_num, type_name, horizontal_pic_url, cartoon_age, area_name, tag,\
                    doulie_tags, series_name, vertical_pic_url, director_id, description, dialogue, update_notify_desc, episode_updated, score, nomal_ids,view_today_count) VALUES\
                        ('%s','%d', '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d')"
                print(url,"写入数据",cover_info['series_name'],title)
                try:
                    cursor.execute(sql % data)
                    connect.commit()
                except Exception as e:
                    print("写入数据库失败" ,e)
                    f=open('1.txt','a')
                    f.write(pymysql.escape_string(cover_info['series_name'])+"\n")
                    f.close()
                    print(data)
                    continue
                    
    def setEscape(self,data):

        if(type(data) == str or type(data) == int):
            return data
        return json.dumps( data ,ensure_ascii=False)

    def hasKey(self,dicts):
        source = "v.qq.com"
        key = ['id','leading_actor_id','second_title','publish_date','current_num','type_name','horizontal_pic_url','cartoon_age','area_name','tag',\
            'doulie_tags','title','vertical_pic_url','director_id','description','dialogue','update_notify_desc','episode_updated','score','nomal_ids','view_today_count',]
        self.tuple_list=[source,self.vcate_id]
        for i in range(0,len(key)):
            #判断字典中是否有key
            if(key[i] in dicts.keys()):
                self.tuple_list.append( self.setEscape( dicts[key[i]] ) )
            else:
                self.tuple_list.append( None )






if __name__ == "__main__":

    playlist = PlayList()

# 关闭连接
cursor.close()
connect.close()
