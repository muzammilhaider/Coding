import React, { useEffect, useState } from 'react'
import axios from 'axios';
import BASE_URL from '../Constants/Constants';

export const Home = () => {
    const [challenge2, setChallenge2] = useState([])
    useEffect(() => {
         axios
            .get(`${BASE_URL}home`)
            .then((res)=>{
                setChallenge2(res.data.data.challenge_2)
            })
            .catch((err)=>{
                console.log(err);
            })
    }, [])
  return (
    <div>HOME</div>
  )
}
