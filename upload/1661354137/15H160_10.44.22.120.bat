@echo off
color 0A
title Mine Systems VNC Launcher
set machinename=15H160
set machineip=10.44.22.120
set username=technician
set password=spycam1
set version=unknown
echo                     _     _         _   ___   _             _
echo  /\  /\   1  1\ 1  1_    1_   \ /  1_    1   1_   /\  /\   1_
echo /  \/  \  1  1   1_    __1   1   __1   1   1_  /  \/  \  __1
echo.
echo Connecting to %machinename% which is running terrain version %version% ...
echo.
ping %machineip% -n 2
tracert %machineip%
"C:\Program Files\uvnc bvba\UltraVNC\vncviewer.exe" -connect %machineip%:15900 /password %password%
pause
