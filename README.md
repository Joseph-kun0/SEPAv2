# S.E.P.A v2

Sistema web desarrollado con **Laravel** para la simulación del proceso de captura de un **Pedimento Aduanal** con fines educativos y de capacitación en materia de comercio exterior mexicano.

---

## Descripción

El **SEPA** busca reproducir el flujo de captura de un pedimento aduanal permitiendo a estudiantes, docentes y desarrolladores practicar el registro de información comercial en un entorno controlado, sin interactuar con los sistemas oficiales de la autoridad aduanera.

El proyecto está orientado al aprendizaje de los procesos involucrados en la elaboración de un pedimento aduanal y constituye la base para futuras funcionalidades relacionadas con el despacho aduanero y la gestión documental en comercio exterior.

---

## ¿ Que es un pedimento aduanal ?

El **pedimento aduanal** es el documento oficial mediante el cual se declara ante la autoridad aduanera la información de una operación de importación o exportación. Este documento permite el despacho de las mercancías y acredita el cumplimiento de las obligaciones fiscales y regulatorias establecidas por la legislación aduanera mexicana.

Un pedimento aduanal integra información como:

* Datos del importador y exportador.
* Información del agente o agencia aduanal.
* Régimen aduanero aplicable.
* Fracción arancelaria de las mercancías.
* Descripción, cantidad y valor de las mercancías.
* Contribuciones y aprovechamientos aplicables.
* Información de transporte y aduanas de entrada o salida.
* Documentos digitales relacionados, como facturas comerciales, COVE, certificados de origen y demás anexos requeridos para la operación.

> **Nota:** Este proyecto es únicamente un simulador con fines académicos y de capacitación. No mantiene comunicación con los servicios oficiales de la Agencia Nacional de Aduanas de México (ANAM) ni genera documentos con validez legal.

---

# Tecnologías utilizadas

* PHP 8.4
* Laravel 12
* MySQL
* Node.js
* Composer

---

# Requisitos

Antes de instalar el proyecto se recomienda preparar el entorno de desarrollo utilizando el repositorio **DevSetup**, el cual contiene la documentación y los scripts necesarios para instalar las herramientas requeridas.

/ https://github.com/xX0Zero0Xx/cove-devsetup.git /

Una vez configurado el entorno, continúe con la instalación del proyecto.

---

# Instalación

## 1 Clonar el repositorio

```bash
git clone https://github.com/xX0Zero0Xx/SEPAv2.git
cd simulador-cove
```

## 2 Crear DB para el proyecto

```bash
create database SEPA;
create user 'xxxx'@'xxxx' identified by 'xxxx';
grant all privileges on simulador_cove.* to 'xxxx'@'xxxx';
flush privileges;
```

## 3 Ejecucion de migraciones y seeder

```bash
php artisan migrate
php artisan db:seed
```

## 4 Iniciar el servidor de desarrollo

```bash
php artisan serve
```

La aplicación estará disponible en:

```
http://127.0.0.1:8000
```

---

## Estado del proyecto

El proyecto se encuentra en desarrollo activo. Las funcionalidades serán incorporadas progresivamente conforme avance el desarrollo del simulador.

Seczo
