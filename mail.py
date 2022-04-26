import smtplib

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

def send_mail(sender, reciever):
    msg = MIMEMultipart()
    msg['From'] = sender        
    msg['To'] = reciever        
    msg['Subject'] = "NordStudio"    
    msg.attach(MIMEText('Вітаю Вас, Василь!'))

    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.starttls()                           
    server.login(sender, '$$kOr1Tt^123')  
    server.send_message(msg)                    
    print('The letter was sent!')
    server.quit()                               

if __name__ == '__main__':
    send_mail('nordstudiofrecs@gmail.com', 'vasyl_tarasyuk@knu.ua')