from turtle import delay
import cv2 as cv
import time
import sys
import time
import requests
from requests import(post,get)




def send_file():
    print("A enviar o ficheiro para a Web...")
    r = post("http://127.0.0.1/Projeto/upload.php", files = {'imagem':  ('opencv_image.png', open('opencv_image.png', 'rb'), 'image/jpeg')})
    print(r.status_code, "--",r.text)

var=1

try:

    print( "Prima CTRL+C para terminar")

    while True: # ciclo para o programa executar sem parar…
         x = get("http://127.0.0.1/Projeto/api/api.php?nome=atuadorAlarme")

         if(x.text == "1"):
            camera = cv.VideoCapture(0, cv.CAP_DSHOW)
            ret, image = camera.read()
            print ("Resultado da Camera=" + str(ret))
            cv.imwrite('opencv_image'+str(var)+'.png', image)
            camera.release()
            cv.destroyAllWindows()
            send_file()
            var+=1
         time.sleep (5)        

                
except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C

    print( "Programa terminado pelo utilizador")

finally : # executa sempre, independentemente se ocorreu exception

    print( "Fim do programa") 



# def tempfunc():
#     try :

#     print( "Prima CTRL+C para terminar")

#     while True: # ciclo para o programa executar sem parar…

#         print("***LER TEMPERATURA DO SERVIDOR***")
#         r=requests.get('http://127.0.0.1/ti/api/api.php?nome=temperatura')
        
#         if float(r.text) > 20.00:
#             print("Temperatura HIGH: " + str(r.text))
#             winsound.PlaySound("Alarm.wav", winsound.SND_FILENAME)
#         elif float(r.text) <= 20.00:
#             print ("Temperatura LOW: " + str(r.text))
           
#         else:
#             print("Pedido de HTTP nao foi bem sucedido")    

#         time.sleep (2)
        

# except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C

#     print( "Programa terminado pelo utilizador")

# except : # caso haja um erro qualquer

#     print( "Ocorreu um erro:", sys.exc_info() )

# finally : # executa sempre, independentemente se ocorreu exception

#     print( "Fim do programa") 
