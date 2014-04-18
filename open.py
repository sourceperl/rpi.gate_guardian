#!/usr/bin/python

import time
import RPi.GPIO as GPIO

# constant
OUT_TC = 7

# to use Raspberry Pi board pin numbers
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
# Set up the GPIO channels - one input and one output
GPIO.setup(OUT_TC, GPIO.OUT)

# Output to pin 12
GPIO.output(OUT_TC, GPIO.HIGH)
time.sleep(2);
GPIO.output(OUT_TC, GPIO.LOW)
