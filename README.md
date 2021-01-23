**Padrões de projeto Parte 3: Padrões criacionais**

 - **Flyweight(segunda parte)**
    - Segunda parte do padrão flyweight e como utiliza-lo de uma forma mais legível utilizando uma classe separada com acesso a cache de memória.
    - https://refactoring.guru/pt-br/design-patterns/flyweight

 - **Factory Method**
    - Quando temos uma classe que, além de realizar uma ação, cria um dos objetos necessários para essa ação acontecer, e dependendo da implementação da classe, esse objeto pode ser de tipos diferentes, dizemos que temos um método que fabrica um objeto, ou seja, um Factory Method.
    - O Factory Method é um padrão criacional de projeto que fornece uma interface para criar objetos em uma superclasse, mas permite que as subclasses alterem o tipo de objetos que serão criados.
     - https://refactoring.guru/pt-br/design-patterns/factory-method

 - **Abstract Factory**
    - Se em algum momento tivermos objetos fortemente relacionados em nosso sistema, podemos separar a criação deles em uma única classe, para garantir que eles sejam criados sempre em conjunto com o seu "par" correto. Essa família de classes estendem o que é conhecida como Abstract Factory, por ser uma fábrica abstrata, que pode criar famílias de objetos, e não apenas um objeto específico.
    - O Abstract Factory é um padrão de projeto criacional que permite que você produza famílias de objetos relacionados sem ter que especificar suas classes concretas.
    - https://refactoring.guru/pt-br/design-patterns/abstract-factory