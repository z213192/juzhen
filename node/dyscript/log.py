# coding:utf-8
import logging
import os,sys
# log_path是存放日志的路径
# cur_path = os.path.dirname(os.path.realpath(__file__))

# determine if application is a script file or frozen exe
if getattr(sys, 'frozen', False):
    cur_path = os.path.dirname(sys.executable)
elif __file__:
    cur_path = os.path.dirname(os.path.realpath(__file__))

# isExists = os.path.exists(cur_path)
# if not isExists:
#     os.makedirs(cur_path)

class Log():
    def __init__(self):
        self.logname = os.path.join(cur_path, 'do.log')
        self.logger = logging.getLogger()
        self.logger.setLevel(logging.INFO)
        # 日志输出格式
        self.formatter = logging.Formatter('[%(asctime)s] - %(levelname)s: %(message)s')
    def __console(self, level, message):
        # 创建一个FileHandler，用于写到本地
        fh = logging.FileHandler(self.logname, 'w', encoding='utf-8')  # 这个是python3的
        fh.setLevel(logging.INFO)
        fh.setFormatter(self.formatter)
        self.logger.addHandler(fh)

        #创建一个StreamHandler,用于输出到控制台
        ch = logging.StreamHandler()
        ch.setLevel(logging.INFO)
        ch.setFormatter(self.formatter)
        self.logger.addHandler(ch)
        if level == 'info':
            self.logger.info(message)
        elif level == 'debug':
            self.logger.debug(message)
        elif level == 'warning':
            self.logger.warning(message)
        elif level == 'error':
            self.logger.error(message)
        # 这两行代码是为了避免日志输出重复问题
        self.logger.removeHandler(ch)
        self.logger.removeHandler(fh)
        # 关闭打开的文件
        fh.close()
    def debug(self, message):
        self.__console('debug', message)
    def info(self, message):
        self.__console('info', message)
    def warning(self, message):
        self.__console('warning', message)
    def error(self, message):
        self.__console('error', message)
if __name__ == "__main__":
   log = Log()
   log.info("---测试开始----")
   log.info("操作步骤1,2,3")
   log.warning("----测试结束----")