##M2: Architectural Design, UML diagrams & Implementation Plan    
####Problem Analysis  
 - **Abstraction**  
    - ท่าบริหารเป็นส่วนที่ให้ผู้ใช้เลือกดูท่าบริหาร
    - ผู้ใช้  ซึ่งประกอบด้วยชื่อผู้ใช้ เบอร์โทรศัพท์ facebook  
    - ข้อมูลประวัติ  ประกอบด้วยบันทึกการใช้ท่าบริหาร  
    - แผนการทำท่าบริหาร  เป็นตารางการทำท่าบริหาร ประกอบด้วยท่าบริหารซึ่งบันทึกไว้เป็นชุดๆ  
    
- **Component**   
    -  ตัวจัดการการสมัครสมาชิก
    -  ตัวจัดการการแก้ไขข้อมูลส่วนตัว
    -  ตัวจัดการการเข้าสู่ระบบ
    -  ตัวจัดการการเลือกท่าบริหาร
    -  ตัวจัดการแผนการทำท่าบริหาร
    -  ตัวจัดการท่าบริหาร   
		
####Application Architecture   
![alt text](https://github.com/CE-KMITL-OOAD-2014/Daily-exercise-log/blob/master/doc/img/application%20architecture.PNG)   
- **ส่วนจัดการผู้ใช้งาน**  
         ประกอบด้วย ตัวจัดการสมัครสมาชิก ตัวจัดการการเข้าสู่ระบบ และตัวจัดการแก้ไขข้อมูลผู้ใช้ ส่วนผู้ใช้งานจะต้องเป็นตัวติดต่อกับฐานข้อมูล และเชื่อมต่อกับส่วนจัดการท่าบริหาร  
- **ส่วนจัดการท่าบริหาร**  
          ประกอบด้วย ตัวจัดการแสดงท่าบริหาร ตัวจัดการแผนการทำท่าบริหาร และตัวจัดการท่าบริหาร ส่วนจัดการท่าบริหารจะเป็นส่วนติดต่อกับฐานข้อมูลท่าบริหาร  
- **ฐานข้อมูลผู้ใช้**  
          ประกอบด้วย ชื่อผู้ใช้ รหัสผ่าน เบอร์โทรศัพท์ Facebook โดยเชื่อมต่อกับส่วนจัดการผู้ใช้งาน   
- **ฐานข้อมูลท่าบริหาร**   
          ประกอบด้วย ท่าบริหาร แผนการบริหาร ข้อเสนอแนะ โดยเชื่อมต่อกับส่วนจัดการท่าบริหาร    
      
####Subsystems / Components   
- **ส่วนจัดการผู้ใช้งาน**  
   -	ตัวจัดการสมัครสมาชิก  :  มีหน้าที่จัดการเก็บข้อมูลต่างๆของการสมัครสมาชิกของผู้ใช้งาน เข้าสู่ฐานข้อมูลผู้ใช้งาน
   -	ตัวจัดการการเข้าสู่ระบบ  :  มีหน้าที่เปรียบเทียบบัญชีผู้ใช้กับฐานข้อมูลผู้ใช้งานเพื่อให้ผู้ใช้งานเข้าถึงข้อมูลส่วนตัวผู้ใช้
   -	ตัวจัดการการแก้ไขข้อมูลผู้ใช้  :  มีหน้าที่รับข้อมูลที่เปลี่ยนแปลงข้อผู้ใช้ส่งไปแก้ไขในฐานข้อมูลของผู้ใช้  
- **ส่วนจัดการท่าบริหาร**   
   -	ตัวจัดการการแสดงท่าบริหาร  :  มีหน้าที่เรียกดูท่าบริหาร ซึ่งจะเรียกข้อมูลในฐานข้อมูลท่าบริหาร  
   -	ตัวจัดการการวางแผนบริหาร  :  มีหน้าที่จัดเก็บข้อมูลแผนการทำท่าบริหาร ที่ผู้ใช้วางแผนไว้ เก็บลงในฐานข้อมูลท่าบริหาร
   -	ตัวจัดการข้อเสนอแนะ  :  มีหน้าที่รับข้อเสนอแนะในการทำท่าบริหารส่งไปเก็บในฐานข้อมูล  
- **ฐานข้อมูลผู้ใช้งาน**  
   - 	ข้อมูลผู้ใช้งาน  :   ภายในจะเก็บข้อมูล ชื่อ รหัสผ่าน เบอร์โทรศัพท์ facebook  ประวัติการทำท่าบริหาร  
- **ฐานข้อมูลท่าบริหาร**  
   - ข้อมูลท่าบริหาร  :  ภายในจะเก็บข้อมูล ท่าบริหาร  ข้อเสนอแนะ    
   
- #####Sequence diagram
    1. ข้อเสนอแนะ   
![alt text](https://github.com/CE-KMITL-OOAD-2014/Daily-exercise-log/blob/master/doc/img/Sequence%20diagram.PNG)        
    2. ตัววางแผนการบริหาร   
![alt text](https://github.com/CE-KMITL-OOAD-2014/Daily-exercise-log/blob/master/doc/img/Sequence%20diagram2.PNG)   

####Domain classes    
   class diagrams    
   ![alt text](https://github.com/CE-KMITL-OOAD-2014/Daily-exercise-log/blob/master/doc/img/Domain%20class.PNG) 
####Deployment      
 Software และ Technology ที่ใช้ ได้แก่
   - Ubuntu 14.04 บน VM 
   - Apache เป็น application sever - Laravel เป็น Framework ที่ใช้พัฒนา(PHP5)
   - phpMyAdmin เป็นตัวช่วยจัดการฐานข้อมูล 
   - Bootstrap เป็น Frontend Framework (HTML, CSS, และ JavaScript)
   - Composer เป็น PHP Dependency manager 
   - Software และระบบทั้งหมดจะทำงานอยู่บน VM IP address : 23.101.27.187       
     
####Implementation Plan  
![alt text](https://github.com/CE-KMITL-OOAD-2014/Daily-exercise-log/blob/master/doc/img/implementationPlan.PNG)  
