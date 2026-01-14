import React from 'react'
import {Route, Routes} from "react-router";

import LandingPage from "./pages/LandingPage"
import MainPage from './pages/MainPage';
import NavBar from './components/NavBar';

export const App = () => {
  return (
    <div data-theme="coffee">
      <NavBar />
      <Routes>
        <Route path="/" element={<LandingPage />}/>
        <Route path="/main" element={<MainPage />}/>
      </Routes>
    </div>

  )

}

export default App