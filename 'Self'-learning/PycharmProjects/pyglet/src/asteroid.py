import pyglet
from pyglet.window import key
from images import *

window = pyglet.window.Window(1440, 900, resizable=False, vsync=True, visible=True)
keys = key.KeyStateHandler()
window.push_handlers(keys)

pyglet.resource.path = ['../images']
pyglet.resource.reindex()

player_image = pyglet.resource.image("car.jfif")
#track_image = pyglet.resource.image("track.filetype")

def center_image(image):
    image.anchor_x = image.width // 2
    image.anchor_y = image.height //2

center_image(player_image)
#center_image(track_image)

@window.event
def on_key_press(symbol, modifiers):
    if symbol == key.W:
        #pass
        print("W")
    if symbol == key.A:
        #pass
        print("A")
    if symbol == key.S:
        #pass
        print("S")
    if symbol == key.D:
        #pass
        print("D")

if __name__ == '__main__':
    pyglet.app.run()
#probably will need to add on_key_release to turn back the steering to straight
