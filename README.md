# Fingerprinting-Devices
Used to obtain the fingerprint and relevant information of devices for red team work.

This is an HTML file containing a script that generates a browser fingerprint and sends it to a server using the POST method. The script uses the Fingerprint2 library to obtain information about the browser and device, such as the user agent, screen resolution, plugins, and fonts. This information is then hashed using the x64hash128 function to generate a unique identifier that can be used to track the user across different websites.

To use this script, you need to include the fingerprint2.js library in your HTML file and modify the URL in the xhr.open() method to point to your own server. Note that sending browser fingerprints without user consent may violate privacy laws in some jurisdictions. Additionally, browser fingerprints can be spoofed or changed by using different devices or browsers, so they should not be relied upon as the sole means of user identification.
