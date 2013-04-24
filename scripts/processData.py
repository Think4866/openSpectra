__author__ = 'Nathan Bennett'
__purpose__ = 'Process files uploaded by the user.'

from xml.etree import ElementTree
import sys
import os
import boto.s3
from boto.s3.key import Key
from time import gmtime, strftime

isConnected = boto.connect_s3()

#load args from upload_datasets.php, argv[0] is the name of the script and args passed here increment in the passed order
inputFile = sys.argv[1]
incValue = sys.argv[2]

#inputFile = "../application/models/data/a11001.ws5" #for testing

fileName = "../application/models/data/output.xml" #for testing

outputFile = open(fileName, "w") #for testing

#reads the WS5 file and takes out the important stuff
def processWS5Data(inputFile):
    if isConnected:
        bucket = bucket = isConnected.get_bucket('spectraview-xml-data')
        dataHeader = "<mugl><plot><renderer type=\"pointline\"><option name=\"linecolor\" value=\"black\"/><option name=\"pointcolor\" value=\"blue\"/><option name=\"pointsize\" value=\"1.5\"/></renderer></plot><data><values>"
        outputFile.write("%s"% dataHeader)
        dataFooter = "</values></data></mugl>"
        print "I've connected to Amazon S3 at %s" % strftime("%a, %d %b %Y %H:%M:%S +0000", gmtime())
        with open(inputFile, 'rt') as ourFile:
            tree = ElementTree.parse(ourFile)
        for node in tree.findall('.//data'):
            numbers = node.text
            numbersSplit = numbers.split()
            numbersSplit = stripAPost(numbersSplit)
            print "And below is our data stream, enjoy your data..."
            for index, element in enumerate(numbersSplit):
                channelFinal = str(index)
                channelFinal = channelFinal + (",")
                dataFinal = str(element)
                finalFormatedData = channelFinal + (" ") + dataFinal + ("\n")
                #s3Connection.set_contents_from_string('%s') % finalFormatedData
                outputFile.write("%s"% finalFormatedData)
        outputFile.write("%s"% dataFooter)
        outputFile.close()
        k = Key(bucket)
        k.key = sys.argv[1]
        k.set_contents_from_filename(fileName)
        finalS3URL =  "http://http://spectraview-xml-data.s3.amazonaws.com/" + (k.key)
        sys.argv[1] = finalS3URL
        os.system("/usr/bin/php /../models/new_dataset_add.php %s %d") % finalS3URL, incValue

#Checks the file name and runs the appropriate function
def checkFileName(inputFile):
    if inputFile.endswith('.ws5') or inputFile.endswith('.WS5'):
        print "It's a WS5 file..."
    if inputFile.endswith('.adt') or inputFile.endswith('.ADT'):
        print "It's an ADT file..."
    return 1

#Removes whitespace from items in a list.
def stripAPost(numbersSplit):
    return ([x.strip() for x in numbersSplit])

#begins our program
if checkFileName(inputFile):
    print "Filename that I am processing is: %s" % inputFile
    processWS5Data(inputFile)
