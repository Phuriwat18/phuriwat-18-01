การติดตั้งและตั้งค่าโปรเจกต์ Laravel
ขั้นตอนการติดตั้ง
1. Clone โปรเจกต์จาก GitHub
เริ่มต้นด้วยการ clone โปรเจกต์ลงในเครื่องของคุณ:

bash
Copy code
git clone https://github.com/username/repository.git
จากนั้นเข้าไปในโฟลเดอร์ที่ clone มา:

bash
Copy code
cd repository
2. สร้างไฟล์ .env
คัดลอกไฟล์ .env.example มาเป็น .env:

bash
Copy code
cp .env.example .env
จากนั้นเปิดไฟล์ .env และแก้ไขการตั้งค่าต่าง ๆ ตามความต้องการ เช่น:

plaintext
Copy code
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newwork   # ชื่อฐานข้อมูลของคุณ
DB_USERNAME=root      # ชื่อผู้ใช้ฐานข้อมูล
DB_PASSWORD=          # รหัสผ่าน (ถ้ามี)
3. ติดตั้ง Dependencies
รันคำสั่งนี้เพื่อติดตั้งแพ็คเกจที่จำเป็น:

bash
Copy code
composer install
4. ตั้งค่า APP Key
สร้าง APP_KEY ด้วยคำสั่งนี้:

bash
Copy code
php artisan key:generate
5. สร้างฐานข้อมูล
สร้างฐานข้อมูลใน MySQL หรือเครื่องมือจัดการฐานข้อมูลที่คุณใช้ และตั้งชื่อให้ตรงกับในไฟล์ .env (ตัวอย่าง: newwork)

6. รัน Migration
สร้างตารางที่จำเป็นในฐานข้อมูลด้วยคำสั่ง:

bash
Copy code
php artisan migrate
7. รันโปรเจกต์
หลังจากตั้งค่าทุกอย่างเสร็จสิ้นแล้ว ให้รันเซิร์ฟเวอร์ด้วยคำสั่ง:

bash
Copy code
php artisan serve
คุณสามารถเข้าถึงแอปพลิเคชันได้ที่ http://localhost:8000
