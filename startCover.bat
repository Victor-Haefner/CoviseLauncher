set "covise=C:\Program Files\COVISE"
set "PATH=%PATH%;%covise%\zebuopt\lib;%covise%\zebuopt\bin"
set "COCONFIG=%1"
echo "%COCONFIG%">> C:\\tmp\startCover-log.txt
"%covise%\zebuopt\bin\Renderer\OpenCOVER.exe" %2