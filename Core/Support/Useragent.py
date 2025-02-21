# ORIGINAL CREATOR: Gagan, Nand and Irtika
# AUTHOR: Gagan, Nand and Irtika
# Copyright (C) 2023 KIA <>
#  

import random
from configparser import ConfigParser


class Select:
   
    nomefile = "Configuration/Configuration.ini"
    parser = ConfigParser()
    parser.read(nomefile)
    useragent_file = parser["Settings"]["useragent_List"]
    f = open(useragent_file, "r")
    value = f.readlines()
    f.close()
    agent = random.choice(value).replace("\n","")