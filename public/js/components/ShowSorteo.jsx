import React, { useState } from 'react';
import Draw from './draw';
import SorteoButton from './SorteoButton';

function ShowSorteo() {
  const currentYear = new Date().getFullYear();
  const [show, setShow] = useState(false);
  const [year, setYear] = useState(currentYear);

  const yearOptions = [];
  for (let y = currentYear; y >= currentYear - 4; y--) {
    yearOptions.push(y);
  }

  return (
    <div className="h-screen flex flex-col items-center justify-center bg-gray-100 p-4">
      <SorteoButton onClick={() => setShow(prev => !prev)}>
        {show ? "Ocultar sorteo" : "Mostrar sorteo"}
      </SorteoButton>
      {show && (
        <div className="mt-6 w-[750px]"> 
          <div className="mb-4">
            <select
              value={year}
              onChange={(e) => setYear(e.target.value)}
              className="w-full p-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-slate-400 hover:bg-slate-200 appearance-none"
            >
              {yearOptions.map(y => (
                <option key={y} value={y}>{y}</option>
              ))}
            </select>
          </div>
          <div className="mt-4">
            <Draw year={year} />
          </div>
        </div>
      )}
    </div>
  );
}

export default ShowSorteo;
