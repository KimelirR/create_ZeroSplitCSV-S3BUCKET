# S3-Buckect jsonlines to CSV

> This is a automated script to download zstandard zipped files from the cloud and unzip it automatically to jsonlines.

<!--Unordered lists-->
* Clone this repository to your computer.
    ```
    git clone https://github.com/KimelirR/create_ZeroSplitCSV-S3BUCKET.git
    ```
* Create .env file 
    ```
    cp .env.example .env
    ```
* **Provide credentials of your S3-BUCKET below in .env file**
   ~~~
    KEY=?
    SECRET=?
    REGION=?
    BUCKET=?
   ~~~

* Install required dependencies through 
  ```
   composer install
  ```
 > <b>Note!</b>
  1. Ensure you give credentials of your s3bucket correctly.

> <b>Lastly!</b>

* Generate Csv and all the functions and classes are inside src folder.

    ```php
    php index.php
    ```