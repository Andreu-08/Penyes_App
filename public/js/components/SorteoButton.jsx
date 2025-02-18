import React from 'react';

function SorteoButton({ onClick, children }) {
  return (
    <button
      onClick={onClick}
      style={{
        backgroundColor: '#687387',
        border: 'none',
        color: 'white',
        padding: '10px 25px',
        textAlign: 'center',
        textDecoration: 'none',
        fontSize: '16px',
        margin: '4px',
        cursor: 'pointer',
        borderRadius: '4px'
      }}
    >
      {children}
    </button>
  );
}

export default SorteoButton;
