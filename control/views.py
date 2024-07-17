from django.shortcuts import render, redirect
from django.http import HttpResponse

# Create your views here.


def home(request):
    current_language = request.session.get('language', 'es')
    # Renderizar el template con el idioma actual
    return render(request, 'home.html', {'language': current_language})

def change_language(request):
    current_language = request.session.get('language', 'es')
    new_language = 'en' if current_language == 'es' else 'es'
    request.session['language'] = new_language

    referer_url = request.META.get('HTTP_REFERER')
    if referer_url:
        path = referer_url.split(request.get_host())[-1]  # obtener la ruta después del dominio
        return redirect(path)
    return redirect('/')

def cerca(request):
    current_language = request.session.get('language', 'es')
    # Renderizar el template con el idioma actual
    return render(request, 'cerca.html', {'language': current_language})
    

def servicios(request):
    current_language = request.session.get('language', 'es')
    # Renderizar el template con el idioma actual
    return render(request, 'servicios.html', {'language': current_language})
    

def terminos(request):
    current_language = request.session.get('language', 'es')
    # Renderizar el template con el idioma actual
    return render(request, 'terminos.html', {'language': current_language})
    