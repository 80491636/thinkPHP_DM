import pymysql

#手机端详情页header
phone_header = {
    'Accept':'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Accept-Encoding':'gzip, deflate, br',
    'Accept-Language':'zh-CN,zh;q=0.9',
    'Connection':'keep-alive',
    'Host':'m.v.qq.com',
    #'Referer':https://v.qq.com/x/cover/ha7r9z89i9d234y.html
    'Upgrade-Insecure-Requests':'1',
    'User-Agent':'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobile Safari/537.36',
}

 #构造请求头
header = { "Accept":"text/html,application/xhtml+xml,application/xml;",
            "Accept-Encoding":"gzip",
            "Accept-Language":"zh-CN,zh;q=0.8",
            "Referer":"https://m.v.qq.com/",
            "User-Agent":"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36"
            }

# 连接数据库
connect = pymysql.Connect(
    host='localhost',
    port=3306,
    user='root',
    passwd='123456',
    db='python',
    charset='utf8'
)
# 获取游标
cursor = connect.cursor()

class PySql():

    def __init__(self):
        print('数据库游标：',cursor)
    
    def __del__(self):
        # 关闭连接
        if cursor:
            cursor.close()
        if connect:
            connect.close()
    def close(self):
        cursor.close()
        connect.close()


