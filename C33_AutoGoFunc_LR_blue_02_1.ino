#include <SoftwareSerial.h>
#include <Servo.h> 
Servo servo1;

#define bRX 11
#define bTX 12
SoftwareSerial mySerial(bTX,bRX); // RX, TX
const int light=13;
byte light_op=0;

const int in1Pin=2;
const int in2Pin=3;
const int in3Pin=4;
const int in4Pin=5;
#define TRIGPIN 8
#define ECHOPIN 9
#define SV1 10
double dangerThresh = 20;
double distance;
int dir = 0;
char key = '0';
double distR=0;
double distL=0;

void setup() 
{ 
  mySerial.begin(9600);
  Serial.begin(9600);
  pinMode(light,OUTPUT);
  Serial.println("press '0' : stop");  
  Serial.println("press '1' :  front");
  Serial.println("press '2' :  back");   
  Serial.println("press '3' : turn right");
  Serial.println("press '4' : turn left"); 
  Serial.println("press '5' : Auto Go"); 
  Serial.println("press 'a' : sensor right"); 
  Serial.println("press 'b' : sensor front"); 
  Serial.println("press 'c' : sensor left"); 
  pinMode(TRIGPIN, OUTPUT);  // 觸發腳設定成「輸出」
  pinMode(ECHOPIN, INPUT);   // 接收腳設定成「輸入」 
  servo1.attach(SV1);
} 
void loop() 
{
  //if(Serial.available())
  if(mySerial.available())
  {
    //key=Serial.read();
    key=mySerial.read();
    Serial.print("key=");
    Serial.println(key);
    switch(key)
    {
      case '0':
        GStop();
      break;
      case '1':
        GFront(); 
      break;
      case '2':
        GBack(); 
      break;
      case '3':
        GRight();
      break;
      case '4':
        GLeft();
      break;
      //case '5':
        //AutoGo();
      //break;
      case 'a':
        servo1.write(0);
      break;
      case 'b':
        servo1.write(90);
      break;
      case 'c':
        servo1.write(180); 
      break;
      case 'd':
        if(light_op)
          digitalWrite(light,HIGH);  
        else
          digitalWrite(light,LOW); 
        light_op = ~light_op;
      break;
    }      
  }
  else if(key=='5'){
    AutoGo();
  }
  
}
void GFront()
{
    analogWrite(in1Pin,255);
    analogWrite(in2Pin,0); 
    analogWrite(in3Pin,0);
    analogWrite(in4Pin,255); 
}
void GBack()
{
    analogWrite(in1Pin,0);
    analogWrite(in2Pin,255); 
    analogWrite(in3Pin,255);
    analogWrite(in4Pin,0); 
}
void GStop()
{
    analogWrite(in1Pin,0);
    analogWrite(in2Pin,0); 
    analogWrite(in3Pin,0);
    analogWrite(in4Pin,0); 
}
void GLeft()
{
    analogWrite(in1Pin,255);
    analogWrite(in2Pin,0); 
    analogWrite(in3Pin,0);
    analogWrite(in4Pin,0); 
}
void GRight()
{
    analogWrite(in1Pin,0);
    analogWrite(in2Pin,0); 
    analogWrite(in3Pin,0);
    analogWrite(in4Pin,255);  
}

 double ping() { 
   digitalWrite(TRIGPIN, LOW); 
   delayMicroseconds(2); 
   digitalWrite(TRIGPIN, HIGH); 
   delayMicroseconds(10); 
   digitalWrite(TRIGPIN, LOW); 
   return (double)pulseIn(ECHOPIN, HIGH)/58; 
 } 

 void AutoGo()
 {
  distance = ping();      // 讀取障礙物的距離
  Serial.print("dist=");
  Serial.println(distance);
  mySerial.print("dist=");
  mySerial.println(distance);
  if (distance>dangerThresh) { // 如果距離大於10cm…
    if (dir != 0) {   // 如果目前的行進狀態不是「前進」
      dir = 0;         // 設定成「前進」
      GStop();    // 暫停馬達0.5秒
      delay(500);
    }
    GFront();    // 前進
    servo1.write(90);// 轉回來
  } 
  else {
    if (dir != 1) { // 如果目前的狀態不是「轉向」
      dir = 1; // 設定成「轉向」
      GStop();  // 暫停馬達0.5秒
      delay(500); 
      //判斷左右
      servo1.write(0);// 向右看
      delay(1000);
      distR = ping();
      Serial.print("distR=");
      Serial.println(distR);
      mySerial.print("distR=");
      mySerial.println(distR);
      servo1.write(180);// 向左看
      delay(1000);
      distL = ping();  
      Serial.print("distL=");
      Serial.println(distL);
      mySerial.print("distL=");
      mySerial.println(distL);
      servo1.write(90);// 看回來
    }  
    if(distR>distL)
      GRight();  // 向右轉
    else
      GLeft();
  }
  delay(1000);   // 持續1秒
 }

