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

from bs4 import BeautifulSoup

# 连接数据库
connect = pymysql.Connect(
    host = 'localhost',
    port = 3306,
    user = 'root',
    passwd = '123456',
    db = 'blog',
    charset = 'utf8'
)
# 获取游标
cursor = connect.cursor()
class PlayList:
    header = {
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
        'Accept-Encoding': 'gzip, deflate, br',
        'Accept-Language': 'zh-CN,zh;q=0.9',
        'Cache-Control': 'max-age=0',
        'Connection': 'keep-alive',
        'Upgrade-Insecure-Requests': '1',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36',
    }

    def __init__(self):
        #   查询数据库
        sql = "SELECT * FROM videoCate "
        cursor.execute(sql)
        for row in cursor.fetchall():
            url = row[6]
            #   打开页面
            try:
                r = requests.get(url, headers=self.header, timeout=5)
            except Exception as e:
                f=open('链接打开错误.txt','a')
                f.write('打开连接失败：' + url + '\n')
                f.close()
                print('打开播放页失败:',e)
            #print("链接状态：",r.status_code)
            r.encoding = 'utf-8'
            # print(r.text)
            #   正则JSON内容
            cover = ''
            searchObj = re.search( 'var COVER_INFO =(.*)',r.text, re.M|re.I)
            if searchObj:
                cover = searchObj.group(1)
            else:
                print ("没有找到 cover  JSON")
            data = demjson.decode(cover)
            print(data['id'],data['leading_actor_id'],data['second_title']
                data['publish_date'],
                data['current_num'],
                data['type_name'],
                data['horizontal_pic_url'],
                data['cartoon_age'],
                data['area_name'],
                data['tag'],
                data['doulie_tags'],
                data['series_name'],
                data['vertical_pic_url'],
                data['director_id'],
                data['description'],
                data['dialogue'],
                data['update_notify_desc'],
                data['episode_updated'],
                data['score'],
                data['nomal_ids'],
            )
            return
            print(pymysql.escape_string(title)) 
            sql = "INSERT INTO video(laiyuan,fenlei_ID,leixing_ID,title,figure_pic,sub_url,cover,video) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s') \
                ON DUPLICATE KEY UPDATE cover = '%s',video = '%s'"
            data = (laiyuan,channel,itype,pymysql.escape_string(title),figure_pic,href,cover,video,cover,video)
            try:
                cursor.execute(sql % data)
            except Exception as e:
                f=open('1.txt','a')
                f.write(pymysql.escape_string(title))
                f.close()
                continue
            else:
                connect.commit()
                       
if __name__ == "__main__":

    playlist = PlayList()

# 关闭连接
cursor.close()
connect.close()