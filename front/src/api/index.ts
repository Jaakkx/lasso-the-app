import axios from 'axios';
import { Question } from '../decl/Question.decl';
import { registerUser } from '../decl/registerUser.decl';
import { loginUser } from '../decl/loginUser.decl';
import { Asso } from '../decl/Asso.decl';
import { updateRanking } from '../decl/updateRanking.decl';

export const registeringUser = async (registerUser:registerUser) => {      
    try{
        const res = await axios.post(
            `${process.env.REACT_APP_BASE_URL}/register`,
            registerUser,
            );
        return res.data;
    } catch(error) {
        throw new Error("Problème lors de l'inscription. Êtes-vous sur que cette adresse n'est pas déjà utilisé ?");
    }
};

export const setLoginUser = async (loginUser: loginUser) => {
    try{
        const res = await axios.post(
            `${process.env.REACT_APP_BASE_URL}/login`,
            loginUser
            )
            
            return res.data;
        }catch(error){
            throw new Error("Problème lors de la connexion");
        }
}

export const getQuestion = async (userId:number):Promise<Array<Question>> => {

    try{
        const res = await axios.get(
            `${process.env.REACT_APP_BASE_URL}/random/question/${userId}`
        )
        return res.data;        
    } catch(error) {
        throw new Error("Problème récupération question");
    }
    
}

export const getAllAsso = async():Promise<Array<Asso>> => {
    try{
        const res = await axios.get(
            `${process.env.REACT_APP_BASE_URL}/association`
        )
        return res.data;        
    }catch(error) {
        throw new Error("Problème de récupération des associations");
    }
}

export const getSingleAsso = async(id:string):Promise<Asso> => {
    try{
        const res = await axios.get(
            `${process.env.REACT_APP_BASE_URL}/association/${id}`
        )
        return res.data;        
    }catch(error) {
        throw new Error("Problème de récupération des associations");
    }
}

export const getUser = async(id:string):Promise<registerUser> => {
    try{
        const res = await axios.get(
            `${process.env.REACT_APP_BASE_URL}/user/${id}`
        )
        return res.data;
    }catch(error) {
        throw new Error("Problème lors de l récupération du profile");
    }
}

export const updateRank = async(updateRanking:updateRanking) => {
    try{
        const res = await axios.post(
            `${process.env.REACT_APP_BASE_URL}/update/ranking/${updateRanking.userId}/${updateRanking.questionId}/${updateRanking.swipe}`,
            updateRanking
        )
        return res.data;
    }catch(error) {
        throw new Error("Problème lors de la mise à jour du classement");
    }
}