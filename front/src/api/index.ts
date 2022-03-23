import axios from 'axios';
import { Question } from '../decl/Question.decl';
import { registerUser } from '../decl/registerUser.decl';

export const registeringUser = async (registerUser:registerUser): Promise<registerUser> => {

    const user:registerUser = {
        email: '',
        password: '',
        lastName: '',
        userName: ''
      };
    //   console.log(1);
      
    try{
        console.log(2);
        const res = await axios.post(
            `${process.env.REACT_APP_BASE_URL}/register`,
            registerUser,
            ).then(response => {
            // console.log(3);
            user.email = response.data.email;
            user.password = response.data.password;
            user.lastName = response.data.lastName;
            user.userName = response.data.userName;
        });
        // console.log(4);
        return user;
    } catch(error) {
        throw new Error("Problème lors de la création de cet utilisateur");
    }
};

export const getQuestion =async () => {

    try{
        const res = await axios.get(
            `${process.env.REACT_APP_BASE_URL}/question`
        )
        return res.data;
    } catch(error) {
        throw new Error("Problème récupération question");
    }
    
}