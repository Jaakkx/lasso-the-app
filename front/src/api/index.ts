import axios from 'axios';
import { Question } from '../decl/Question.decl';
import { registerUser } from '../decl/registerUser.decl';
import { loginUser } from '../decl/loginUser.decl';
import { Asso } from '../decl/Asso.decl';

export const registeringUser = async (registerUser:registerUser): Promise<registerUser> => {

    const user:registerUser = {
        email: '',
        password: '',
        lastName: '',
        userName: ''
      };
      
    try{
        const res = await axios.post(
            `${process.env.REACT_APP_BASE_URL}/register`,
            registerUser,
            ).then(response => {
            user.email = response.data.email;
            user.password = response.data.password;
            user.lastName = response.data.lastName;
            user.userName = response.data.userName;
        });
        return user;
    } catch(error) {
        throw new Error("Problème lors de la création de cet utilisateur");
    }
};

export const setLoginUser = async (loginUser: loginUser): Promise<loginUser> => {
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

export const getQuestion = async ():Promise<Array<Question>> => {

    try{
        const res = await axios.get(
            `${process.env.REACT_APP_BASE_URL}/question`
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