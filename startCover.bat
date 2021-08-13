set "PATH=%PATH%;D:\Program Files\COVISE\zebuopt\lib;D:\Program Files\COVISE\zebuopt\bin"
set "COCONFIG=%1"
echo "%COCONFIG%">> C:\\tmp\startCover-log.txt
"D:\Program Files\COVISE\zebuopt\bin\Renderer\OpenCOVER.exe" %2