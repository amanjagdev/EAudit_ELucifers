const int trigpin = 10;
const int echopin = 11;


long duration,distance;
 
void setup()
{
Serial.begin(9600);
pinMode(trigpin,OUTPUT);
pinMode(echopin,INPUT);
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


  }
