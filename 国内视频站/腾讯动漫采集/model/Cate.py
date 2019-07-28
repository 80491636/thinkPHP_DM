class Cate:
    def __init__(self):
        pass
    def forChannel(self):
        # 查询数据
        sql = "SELECT * FROM cate "
        data = (0,-1)
        cursor.execute(sql % data)