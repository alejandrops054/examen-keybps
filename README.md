# examen-keybps

# Operaciones con Números (JavaScript Vanilla)

Este directorio contiene varios ejercicios básicos de programación en **JavaScript Vanilla**, cada uno implementado en su propio archivo **.html**.
Los ejercicios se pueden abrir directamente en cualquier navegador sin necesidad de frameworks ni servidores adicionales.

---

## Ejercicios

### 1) Ejercicio 1 — Operaciones con dos números
**Archivo:** `ejercicio1.html`  
**Funcionalidades:**
- Permite ingresar **múltiples números** (botón para agregar inputs).
- Selector para elegir la operación:
    - **Suma**
    - **Producto (multiplicación)**
    - **Número mayor**
    - **Todas las operaciones**
- **Calcular** → muestra el resultado.
- **Resetear** → limpia los inputs y el resultado.

---

### 2) Ejercicio 2 — Clasificación por edad
**Archivo:** `ejercicio2.html`  
**Funcionalidades:**
- Lee una **edad**.
- Reglas:
    - `< 18` → **Menor de edad**
    - `18–35` → **Adulto joven**
    - `> 35` → **Adulto mayor**
    - `< 0` o `> 120` → **Edad inválida**
- **Evaluar** para mostrar la categoría.
- **Resetear** para limpiar.

---

### 3) Ejercicio 3 — Contar números pares (finaliza con 0)
**Archivo:** `ejercicio3.html`  
**Funcionalidades:**
- Ingresa números enteros **uno por uno** y presiona **Agregar**.
- Al ingresar **0**, se detiene la captura y se muestra:
    - Total de números ingresados.
    - **Cantidad de números pares**.
- **Resetear** para iniciar una nueva captura.

---

### 4) Ejercicio 4 — Procesar calificaciones
**Archivo:** `ejercicio4.html`  
**Funcionalidades:**
- Lee las calificaciones de **5 estudiantes**.
- Valida que cada calificación esté en el rango **0–10**.
- Calcula:
    - **Promedio general**.
    - **Aprobados** (calificación **≥ 6**).
    - **Calificación más alta** y **más baja** (con índice de estudiante).
- Botón **Rellenar ejemplo** para probar rápido.
- **Resetear** para limpiar.

> Si usas otra escala (p. ej., 0–100), ajusta las constantes en el script (`MIN_CAL`, `MAX_CAL`, `APROBACION`).

---

### 5) Ejercicio 5 — Tabla de multiplicar (1–10)
**Archivo:** `ejercicio5.html`  
**Funcionalidades:**
- Ingresa un número **entero** del **1 al 10**.
- Genera su **tabla de multiplicar del 1 al 10**.
- **Copiar** para enviar la tabla al portapapeles.
- **Resetear** para limpiar.

---

##  Uso general

1. Abre el archivo HTML del ejercicio en cualquier navegador (por ejemplo, `ejercicio1.html`).
2. Ingresa los datos solicitados.
3. Presiona el botón de acción del ejercicio (**Calcular**, **Evaluar**, **Agregar**, **Generar**, etc.).
4. Usa **Resetear** para limpiar y volver a empezar.

> Todos los archivos son independientes y no requieren servidor. Solo da doble clic o arrástralos al navegador.

---

## Estructura de la carpeta


<details>
  <summary>Estructura de la carpeta</summary>

  <pre><code>examen-keybps/
├─ ejercicio1.html
├─ ejercicio2.html
├─ ejercicio3.html
├─ ejercicio4.html
├─ ejercicio5.html
└─ README.md
</code></pre>
</details>

---

## Notas

- Todos los ejercicios están desarrollados en **JavaScript Vanilla** y **HTML**.
- Cada archivo funciona de forma independiente.
- Incluyen validaciones básicas de entrada para evitar datos fuera de rango o no numéricos.
- Ideales para practicar conceptos de:
    - Entrada/salida en formularios.
    - Condicionales y bucles.
    - Arreglos, agregaciones (suma/producto), y cálculos simples.

