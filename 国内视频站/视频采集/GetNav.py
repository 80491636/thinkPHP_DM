'''
2019-03-03  获取视频类型、分类 与 对应ID 
'''
#导入需要的类库
import requests
import re
import sys
import time
import pymysql
import PySql

from urllib import parse
from bs4 import BeautifulSoup
from selenium import webdriver

connect = PySql.connect
cursor = PySql.cursor
header = PySql.header

class GetNav():

    __url = "https://v.qq.com"

    def __init__(self):

        #   打开页面
        r = requests.get(self.__url,headers=self.header)

        r.encoding='utf8'

        print("链接状态：",r.status_code)
        #   分析页面内容
        soup = BeautifulSoup(r.content, 'lxml')
        #   获取所有分类链接
        site_a = soup.find('div',{'class','site_channel'}).find_all('a')

        for item in site_a:

            #   视频来源 
            self.__laiyuan = ''

            if item['href'].find('http') != -1 or item['href'].find('javascript') != -1:
                continue

            #   例如：https://v.qq.com/channel/choice
            self.__laiyuan = self.__url + item['href']

            #   视频分类
            self.__shipinfenlei = ''
            #   例如：电视剧
            self.__shipinfenlei = item.text

            print('视频来源：',self.__laiyuan,item.text)

            self.get_channel(self.__laiyuan)

    #   获取片库链接
    def get_channel(self,url):

        #   打开页面
        r = requests.get(url,headers=self.header)

        r.encoding='utf8'

        print("链接状态：",r.status_code)
        #   分析页面内容
        soup = BeautifulSoup(r.content, 'lxml')
        #   获取所有分类链接
        site = soup.find('div',{'class','site_subnav_inner'})

        if site == None:
            return
        site_a = site.find_all('a')

        for links in site_a:
            pass
        print(self.__url + links['href'])

        #url结果  
        result = parse.urlparse(self.__url + links['href'])

        #url里的查询参数  
        query_dict = parse.parse_qs(result.query)

        #获取我需要的信息
        application = query_dict.get('channel',[])

        #   分类type
        self.__fenlei_id = application

        self.get_itye(self.__url + links['href'])


    #   获取视频 类型
    def get_itye(self,url):

        #   打开页面
        r = requests.get(url,headers=self.header)

        print(r.encoding,r.apparent_encoding)

        #   修改编码类型使中文正常显示
        r.encoding = "utf-8"

        print("链接状态：",r.status_code)

        #   分析页面内容
        soup = BeautifulSoup(r.content, 'lxml')

        #   获取视频类型div块
        itypes = soup.find_all('div',{'class':'filter_line'})[1]

        #   获取视频所有类型链接
        labels = itypes.find_all('a',{'class':'filter_item'})

        for item in labels:

            #   获取 类型与对应id
            itype = item.attrs['data-value']

            print(self.__laiyuan,'视频分类：',self.__shipinfenlei,'分类ID：',self.__fenlei_id,'类型名称:',item.text,'类型ID：',itype,'\n')

            # 插入数据
            sql = "INSERT INTO nav (laiyuan, shipinfenlei, fenlei_ID,shipinleixing,leixing_ID) VALUES ( '%s', '%s', '%s', '%s', '%s' )"

            data = (self.__laiyuan,self.__shipinfenlei,self.__fenlei_id[0],item.text, itype)

            cursor.execute(sql % data)

            connect.commit()

            print('成功插入', cursor.rowcount, '条数据')

myclass = GetNav()

cursor.close()
connect.close()