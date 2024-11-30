@echo off
:: Get the IPv4 address from ipconfig
for /f "tokens=14" %%i in ('ipconfig ^| findstr /i "IPv4 Address" ^| findstr "192."') do set LOCAL_IP=%%i

:: Check if the IP was found
if "%LOCAL_IP%"=="" (
    echo Unable to detect IP address. Ensure your Wi-Fi is connected.
    pause
    exit /b
)

:: Start the PHP server
echo Script made with love by: Ralph Maron A. Eda
echo Starting PHP server on %LOCAL_IP%:3333
php -S %LOCAL_IP%:3333
pause
