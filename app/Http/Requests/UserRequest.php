<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userid = $this->route('user');
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . ($userid ? $userid->id : null),
            'cpf' => 'required|string|size:11|regex:/^\d{11}$/|unique:users,cpf,' . ($userid ? $userid->id : null),
            'data_nascimento' => 'required|date',
            'telefone' => 'required|numeric|digits_between:10,11',
            'genero' => 'required|in:Masculino,Feminino,Outro',

        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'O campo Nome é obrigatório.',
            'name.min' => 'O Nome deve ter pelo menos 3 caracteres.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'Informe um email válido.',
            'email.unique' => 'Este email já está em uso.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.numeric' => 'O CPF deve conter apenas números.',
            'cpf.digits' => 'O CPF deve ter exatamente 11 dígitos.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'data_nascimento.required' => 'O campo Data de Nascimento é obrigatório.',
            'data_nascimento.date' => 'Informe uma data válida.',
            'telefone.required' => 'O campo Telefone é obrigatório.',
            'telefone.numeric' => 'O Telefone deve conter apenas números.',
            'telefone.digits_between' => 'O Telefone deve ter entre 10 e 11 dígitos.',
            'genero.required' => 'O campo Gênero é obrigatório.',
            'genero.in' => 'Escolha um gênero válido (Masculino, Feminino ou Outro).',
        ];
    }
}
