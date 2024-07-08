from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.


def home(request):
    return render(request, 'home.html')

def cerca(request):
    return render(request, 'cerca.html')

def servicios(request):
    return render(request, 'servicios.html')
