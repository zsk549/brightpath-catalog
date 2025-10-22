export interface Course {
  id: number;
  title: string;
  category: string;
  description: string;
  price: number;
  image: string;
  hotmartLink: string;
  featured: boolean;
  topics: string[];
}

export const categories = [
  "Desenvolvimento Web",
  "Marketing Digital",
  "Design Gráfico",
  "Fotografia",
  "Negócios",
  "Desenvolvimento Pessoal",
  "Idiomas",
  "Música",
  "Saúde e Fitness",
  "Culinária"
];

export const courses: Course[] = Array.from({ length: 117 }, (_, i) => {
  const categoryIndex = i % categories.length;
  const priceOptions = [97, 147, 197, 247, 297, 347, 397, 497];
  const courseNumber = i + 1;
  
  return {
    id: courseNumber,
    title: `Curso Profissional de ${categories[categoryIndex]} ${Math.floor(i / categories.length) + 1}`,
    category: categories[categoryIndex],
    description: `Aprenda tudo sobre ${categories[categoryIndex]} do básico ao avançado com metodologia comprovada e certificado incluso.`,
    price: priceOptions[i % priceOptions.length],
    image: `https://images.unsplash.com/photo-${1500000000000 + i * 1000000}?w=800&h=600&fit=crop`,
    hotmartLink: `https://pay.hotmart.com/SEU_PRODUTO_${courseNumber}`,
    featured: i < 8,
    topics: [
      `Módulo 1: Introdução ao ${categories[categoryIndex]}`,
      `Módulo 2: Conceitos Fundamentais`,
      `Módulo 3: Técnicas Avançadas`,
      `Módulo 4: Projetos Práticos`,
      `Módulo 5: Certificação`,
      `Bônus: Material de Apoio Exclusivo`
    ]
  };
});
