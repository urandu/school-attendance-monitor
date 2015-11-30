#web-socket server.....
from websocket_server import WebsocketServer
from time import sleep
import serial

# Called for every client connecting (after handshake)
def new_client(client, server):
    print("New client connected and was given id %d" % client['id'])
    server.send_message_to_all("Hey all, a new client has joined us")


# Called for every client disconnecting
def client_left(client, server):
    print("Client(%d) disconnected" % client['id'])


# Called when a client sends a message
def message_received(client, server, message):
    from_board=""
    if len(message) > 200:
        message = message[:200] + '..'
    #print("Client(%d) said: %s" % (client['id'], message))
    #server.send_message(client,"i received your message, you are awesome!!")
    from_board= ser.readline()
    while len(from_board) != 8:
        from_board=ser.readline()
    server.send_message(client,from_board)


ser = serial.Serial('/dev/ttyACM3', 9600) # Establish the connection on a specific port
PORT = 9014
server = WebsocketServer(PORT)
server.set_fn_new_client(new_client)
server.set_fn_client_left(client_left)
server.set_fn_message_received(message_received)
server.run_forever()


