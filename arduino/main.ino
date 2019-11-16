const int trigpin = 10;
const int echopin = 11;
int led = 13;                
int sp = 2;             
int state = LOW;             
int val = 0;              

long duration,distance;
 
void setup()
{
  pinMode(led, OUTPUT);      
  pinMode(sp, INPUT);        
  pinMode(trigpin,OUTPUT);
  pinMode(echopin,INPUT);
  Serial.begin(9600);    
}

void loop()
{
  digitalWrite(trigpin, LOW);
  delayMicroseconds(2);

  digitalWrite(trigpin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigpin, LOW);
    
  duration=pulseIn(echopin,HIGH);
  distance=duration*0.017;


  Serial.println(distance);
    delay(40);
    val = digitalRead(sp);   
    if (val == HIGH || distance < 10) {           // check if the sensor is HIGH
      digitalWrite(led, HIGH);   // turn LED ON
      delay(100);    
                  // delay 100 milliseconds 
    } 

}



