<?php

class Calculator
{
    private $materiaSelecionada;
    private $porcentagemFaltas;

    /**
     * Atribui os valores aos atributos da classe
     * @param string $materia - Materia selecionada
     * 
     * @throws InvalidArgumentException Se a porcentagem de faltas não for um número inteiro positivo
     */
    public function __construct($materia = null, $porcentagem)
    {
        // Converte o valor de porcentagem para uma string
        $porcentagem = (string) $porcentagem;
        
        /**
         * Verifica se a porcentagem transformada em string é igual a uma string '0' (qualquer letra) 
         * ou $porcentagem transformada em int é menor ou igual a zero ou maior ou igual a 101
         */
        if ($porcentagem === '0' || (int) $porcentagem <= 0 || (int)$porcentagem >= 101) {
            throw new InvalidArgumentException("A porcentagem de faltas deve ser um inteiro maior que 0 e menor que 101");
        } else {
            // Transforma a porcentagem de volta à uma int
            $porcentagem = (int)$porcentagem;
        }

        $this->porcentagemFaltas = $porcentagem;
        $this->materiaSelecionada = $materia;
    }

    /**
     * Calcula as horas faltas aceitáveis para a matéria selecionada
     * @return array - Informações com nome da materia e horas faltas aceitáveis
     */
    public function calcularFaltasHoras()
    {
        // Array com as materias
        $materias = [
            'Comunicação Oral e Escrita' => 48,
            'Fundamentos de Tecnologia da Informação' => 36,
            'Fundamentos de Web Design' => 36,
            'Informática Aplicada' => 60,
            'Inovação e Emrpeendedorismo' => 30,
            'Lógica da Programação' => 120,
            'Desenvolvimento de Sistemas I' => 82,
            'Gestão de Projetos' => 30,
            'Interface Homem-computador' => 48,
            'Metodologia da Pesquisa' => 30,
            'Modelagem de sistemas' => 72,
            'Programação WEB' => 72,
            'Banco de dados' => 84,
            'Desenvolvimento de Sistemas II' => 72,
            'Desenvolvimento de Sistemas para Dispositivos Móveis' => 72,
            'Testes de Sistema' => 48,
            'TCC' => 60
        ];

        // Verifica se a matéria não foi selecionada
        if ($this->materiaSelecionada == null) {
            throw new InvalidArgumentException("A matéria não foi selecionada");
        }

        // Verifica se a matéria existe no array $materias
        if (!array_key_exists($this->materiaSelecionada, $materias)) {
            throw new InvalidArgumentException("A matéria selecionada não existe");
        }

        // Atribui a carga horária da matéria selecionada a $cargaHoaria e calcula as faltas aceitáveis
        $cargaHoraria = $materias[$this->materiaSelecionada];
        $horasFaltasAceitavel = ($cargaHoraria * $this->porcentagemFaltas) / 100;

        // Retorna um array associativo com a matéria selecionada e quantas horas é aceitável faltar
        return [
            'materia' => $this->materiaSelecionada,
            'horas' => $horasFaltasAceitavel,
        ];
    }

    /**
     * Converte as horas faltas aceitáveis em dias de aula (1 dia = 3 horas)
     * @param int $horas - Horas de aula que podem ser faltadas
     * @return int - Dias que podem ser faltados
     */
    public function converterHorasParaDias($horas)
    {
        return $horas / 3;
    }
}