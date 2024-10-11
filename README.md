วิธี clone github
ไปที่หน้า GitHub ของ repository ที่คุณต้องการ clone
คลิกที่ปุ่ม Code แล้วจะมีลิงก์สำหรับ clone (เช่น HTTPS, SSH หรือ GitHub CLI)
เลือกใช้ลิงก์แบบ HTTPS (เช่น https://github.com/username/repository.git)
เปิด Terminal หรือ Command Line:
บน Windows: ใช้ Command Prompt, PowerShell หรือ Git Bash
บน macOS หรือ Linux: เปิด Terminal
ไปยังโฟลเดอร์ที่ต้องการบันทึกโปรเจกต์:
ใช้คำสั่ง cd เพื่อไปยังโฟลเดอร์ที่คุณต้องการ clone โปรเจกต์ลงไป เช่น:
cd path/to/your/folder
ใช้คำสั่ง git clone: รันคำสั่งนี้ใน Terminal หรือ Command Line:
git clone https://github.com/username/repository.git
โดยเปลี่ยน https://github.com/username/repository.git เป็นลิงก์ของ repository ที่คุณได้คัดลอกมา
ตรวจสอบการ clone สำเร็จ:
เมื่อคำสั่งรันเสร็จสิ้น จะมีโฟลเดอร์ชื่อเดียวกับ repository ปรากฏในโฟลเดอร์ที่คุณอยู่
ใช้คำสั่ง cd เพื่อลองเข้าไปในโฟลเดอร์ที่เพิ่งถูก clone:
cd repository
Clone ผ่าน SSH (ถ้ามีการตั้งค่า)
หากคุณได้ตั้งค่า SSH keys ไว้แล้ว คุณสามารถใช้ SSH URL เพื่อ clone ได้:
git clone git@github.com:username/repository.git

สร้าง env
ขั้นตอนการสร้างไฟล์ .env
คัดลอกไฟล์ .env.example: โดยทั่วไปในโปรเจกต์ Laravel จะมีไฟล์ตัวอย่าง .env.example อยู่แล้ว คุณสามารถคัดลอกไฟล์นี้เพื่อสร้างไฟล์ .env ใหม่
รันคำสั่งนี้ใน Terminal หรือ Command Line (ใน root directory ของโปรเจกต์ Laravel):
cp .env.example .env
แก้ไขไฟล์ .env: เปิดไฟล์ .env ที่คุณเพิ่งคัดลอกมาและแก้ไขค่าต่าง ๆ ตามการตั้งค่าของโปรเจกต์คุณ เช่น การเชื่อมต่อฐานข้อมูล, แอปชื่อ, หรือการตั้งค่าอื่น ๆ
ตัวอย่างค่าในไฟล์ .env:
plaintext
Copy code
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=
APP_DEBUG=true
APP_URL=http://localhost
LOG_CHANNEL=stack
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newwork  # ชื่อฐานข้อมูลของคุณ
DB_USERNAME=root     # ชื่อผู้ใช้
DB_PASSWORD=         # รหัสผ่าน
ตั้งค่า APP_KEY: หลังจากที่คุณสร้างไฟล์ .env แล้ว คุณต้องตั้งค่า APP_KEY เพื่อสร้างคีย์แอปพลิเคชัน ซึ่งใช้สำหรับการเข้ารหัสข้อมูลบางประเภทใน Laravel
รันคำสั่งนี้:
php artisan key:generate
คำสั่งนี้จะสร้าง APP_KEY ให้โดยอัตโนมัติและบันทึกไว้ในไฟล์ .env

สรุป
ใช้คำสั่ง cp .env.example .env เพื่อคัดลอกไฟล์ตัวอย่าง.
แก้ไขไฟล์ .env และตั้งค่าข้อมูลที่จำเป็น.
รันคำสั่ง php artisan key:generate เพื่อสร้าง APP_KEY.

สร้าง database (ถ้า database หาย)
ตั้งชื่อ database ให้ และเอาชื่อใน database ไปใส่ใน VScode ให้ตรงกัน

สร้างตาราง ในdatabase 
php artisan migrate










เพียงเท่านี้คุณก็สร้างไฟล์ .env สำหรับโปรเจกต์ Laravel ได้เรียบร้อยแล้ว
