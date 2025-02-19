@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\ingres\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\ingres\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\mysql\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\mysql\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\postgresql\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\openoffice\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache-tomcat\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\resin\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\resin\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\jetty\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\jetty\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\subversion\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\lucene\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\lucene\scripts\ctl.bat START)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\third_application\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\third_application\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\third_application\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\lucene\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\subversion\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\subversion\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\jetty\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\jetty\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\resin\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\resin\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\openoffice\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\apache\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\ingres\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\ingres\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\mysql\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\mysql\scripts\ctl.bat STOP)
if exist C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\nasir\Users\you\classwork\CISC3300\MAMP\postgresql\scripts\ctl.bat STOP)

:end

