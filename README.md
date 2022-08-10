
# Book Worm

A website to read books online with face recognition login and voice search feature.


## Installation


```bash
1. Install Python
2. Install Xampp and copy the project files to htdocs folder 
    inside xampp folder.
3. Open login.py and make sure to replace the top comment 
    "#! C:\Python39\python.exe with your python path."
4. Navigate project folder and execute the following command :
    -> pip install cmake
    -> pip install dlib
    -> pip install face-recognition
5. Open xampp control panel -> apache -> config and 
   modify the httpd.conf file by adding  :
    -> " Options Indexes FollowSymLinks Includes ExecCGI
        AddHandler cgi-script .py .cgi .pl .asp "
   at the end of the file , without double quotes and save it.
    
   

```
    
## Working

```bash
1. Run Xampp
2. Open chrome and write "localhost/index.html" to open first page.
3. First Sign up with email , password, and a jpg image of yours.
4. Then, login using email and password or face login.
5. After logging in you will get to the main page where you can 
   read books or search them using voice search option available.

```
## Tools && Libraries Used

```bash
Python - face_recognition. 
XAMPP - Apache server and MySql database.
Bootstrap - Design.
Html, CSS , javascript - Website structure and design.
Web Speech Api - To convert voice to text.
```