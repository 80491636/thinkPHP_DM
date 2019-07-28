import re
 
line = "每周三四五20点更新2集 会员始终多看6集/更新至12集"
 
searchObj = re.search( '全\d{1,4}集', line, re.M|re.I)
 
if searchObj:
   print ("searchObj.group() : ", searchObj.group())
else:
   print ("Nothing found!!")