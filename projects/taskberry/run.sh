#!/bin/bash

# Get the IPv4 address using ipconfig and filter it
LOCAL_IP=$(ipconfig | grep -A 10 "Wireless LAN adapter Wi-Fi" | grep "IPv4 Address" | awk -F: '{print $2}' | tr -d ' \r')

# Check if the IP address is empty
if [ -z "$LOCAL_IP" ]; then
    echo "Unable to detect IP address. Ensure your Wi-Fi is connected."
    exit 1
fi

# Start the PHP server
echo "Script made with love by: Ralph Maron A. Eda"
echo "Starting PHP server on $LOCAL_IP:3333"
php -S "$LOCAL_IP:3333"
