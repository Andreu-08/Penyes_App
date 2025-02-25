import React, { useState, useEffect } from 'react';

function Draw({ year }) {
  const [drawData, setDrawData] = useState([]);

  useEffect(() => {
    // Se actualiza la URL para enviar el año como segmento de la ruta
    fetch(`/api/draw/${year}`)
      .then(response => response.json())
      .then(data => setDrawData(data.locations))
      .catch(error => console.error('Error fetching data:', error));
  }, [year]);

  // Construir matriz 5x5 donde las filas son y y las columnas se invierten
  const matrix = Array.from({ length: 5 }, () => Array(5).fill(''));
  drawData.forEach(item => {
    const { x_coordinate, y_coordinate, crew } = item;
    if (x_coordinate < 5 && y_coordinate < 5) {
      const adjustedColumn = 5 - 1 - x_coordinate; // invertir eje X
      // Se asigna el nombre de la peña en vez de crew_id
      matrix[y_coordinate][adjustedColumn] = crew ? crew.name : '';
    }
  });

  return (
    <div className="flex justify-center">
      <table>
        <tbody>
          {matrix.map((row, i) => (
            <tr key={i}>
              {row.slice().reverse().map((cell, j) => (
                <td
                  key={j}
                  style={{
                    border: '3px solid #ccc',
                    width: '150px',
                    height: '150px',
                    textAlign: 'center',
                    verticalAlign: 'middle',
                    fontSize: '24px',
                    boxShadow: '0 0 10px rgba(0, 0, 0, 0.4)',
                  }}
                >
                  {cell}
                </td>
              ))}
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default Draw;
