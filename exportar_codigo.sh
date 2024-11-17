#!/bin/bash

# Tamaño máximo en bytes para cada archivo .txt
MAX_SIZE=500000  # (500 KB ajustable)

# Variables de control
current_size=0
file_count=1
output_file="codigo_parte${file_count}.txt"

# Crear el primer archivo de salida
> "$output_file"

# Iterar sobre cada archivo .php del proyecto
find . -type f -name "*.php" | while read -r php_file; do
    # Leer el contenido del archivo PHP actual
    php_content=$(cat "$php_file")

    # Comprobar si agregar el archivo superaría el tamaño máximo
    if (( current_size + ${#php_content} > MAX_SIZE )); then
        # Si es así, crear un nuevo archivo de salida
        ((file_count++))
        output_file="codigo_parte${file_count}.txt"
        > "$output_file"
        current_size=0
    fi

    # Añadir el contenido del archivo PHP al archivo de salida
    echo "=== $php_file ===" >> "$output_file"
    echo "$php_content" >> "$output_file"
    echo -e "\n" >> "$output_file"

    # Actualizar el tamaño actual del archivo de salida
    current_size=$((current_size + ${#php_content}))
done

echo "Exportación completada en ${file_count} archivos .txt"
