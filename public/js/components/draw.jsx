import React, { useState, useEffect } from 'react';

function Draw() {
  const [drawData, setDrawData] = useState([]);

  useEffect(() => {
    fetch('/api/locations')
      .then(response => response.json())
      .then(data => setDrawData(data))
      .catch(error => console.error('Error fetching data:', error));
  }, []);

  // Construir matriz 5x5 donde las filas son y y las columnas X invertido
  const matrix = Array.from({ length: 5 }, () => Array(5).fill(''));
  drawData.forEach(item => {
    const { x_coordinate, y_coordinate, crew_id } = item;
    if (x_coordinate < 5 && y_coordinate < 5) {
      const adjustedColumn = 5 - 1 - x_coordinate; // invertir eje X
      matrix[y_coordinate][adjustedColumn] = crew_id;
    }
  });

  return (
    <>
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
    </>
  );
}

export default Draw;
