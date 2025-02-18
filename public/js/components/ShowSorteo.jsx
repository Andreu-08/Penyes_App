import React, { useState } from 'react';
import Draw from './draw';
import SorteoButton from './SorteoButton';

function ShowSorteo() {
  const [show, setShow] = useState(false);

  return (
    <div className="h-screen flex flex-col items-center justify-center">
      <SorteoButton onClick={() => setShow(prev => !prev)}>
        {show ? "Ocultar sorteo" : "Mostrar sorteo"}
      </SorteoButton>
      {show && (
        <div className="mt-8">
          <Draw />
        </div>
      )}
    </div>
  );
}

export default ShowSorteo;
