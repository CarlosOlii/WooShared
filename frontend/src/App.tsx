import { useEffect, useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {
    const [laravelVersion, setLaravelVersion] = useState([]);

    useEffect(() => {
        async function getLaravelVersion() {
            const url = import.meta.env.VITE_API_URL || 'http://localhost:8989';
            const response = await fetch(url);
            const jsonData = await response.json();

            setLaravelVersion(jsonData);
        }

        getLaravelVersion();
    }, []);

  return (
    <>
      <div>
        <a href="https://vitejs.dev" target="_blank" >
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Vite + React + Laravel { laravelVersion }</h1>
    </>
  )
}

export default App
