
# Book Worm

A website to read books online with face recognition login and voice search feature.

##Overview
1. First an user need to signup or log in from the front page.
   
![Picture1](https://github.com/Sumit311/Book-worm/assets/87108007/244f3501-7d2f-49e9-b6b4-47528794eb25)

2. For sign up below mentioned detials in the picture are required.
   
    ![Picture2](https://github.com/Sumit311/Book-worm/assets/87108007/88fc24cf-dff0-449a-a523-2f913aaaa2a1)

3. Log in can be done using two ways , first is email and password

   ![Picture3](https://github.com/Sumit311/Book-worm/assets/87108007/9c30fcb3-33da-4bb5-b89e-0655aba3f99d)

4. Second way of logging in is by using face login feature

   ![Picture4](https://github.com/Sumit311/Book-worm/assets/87108007/38f13699-13d1-45af-9f56-d078c2ec1326)

5. After logging in user get to the main content page , where the used can read any book or search with the help of voice search feature for a specific book.

   ![Picture5](https://github.com/Sumit311/Book-worm/assets/87108007/1a2b9a97-c3cb-459c-8dc8-4bd5ad503c46)



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
Python - face_recognition library. 
XAMPP - Apache server and MySql database.
Bootstrap - Design.
Html, CSS , javascript - Website structure and design.
Web Speech Api - To convert voice to text.
```
