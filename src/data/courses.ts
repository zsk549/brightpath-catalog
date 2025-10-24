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

// Mapeamento de imagens temáticas por categoria
const categoryImages: Record<string, string[]> = {
  "Desenvolvimento Web": [
    "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&h=600&fit=crop"
  ],
  "Marketing Digital": [
    "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1557838923-2985c318be48?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=800&h=600&fit=crop"
  ],
  "Design Gráfico": [
    "https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1572044162444-ad60f128bdea?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=800&h=600&fit=crop"
  ],
  "Fotografia": [
    "https://images.unsplash.com/photo-1452587925148-ce544e77e70d?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1471341971476-ae15ff5dd4ea?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1606244864456-8bee63fce472?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=800&h=600&fit=crop"
  ],
  "Negócios": [
    "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1553877522-43269d4ea984?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800&h=600&fit=crop"
  ],
  "Desenvolvimento Pessoal": [
    "https://images.unsplash.com/photo-1483058712412-4245e9b90334?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&h=600&fit=crop"
  ],
  "Idiomas": [
    "https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1455390582262-044cdead277a?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1457369804613-52c61a468e7d?w=800&h=600&fit=crop"
  ],
  "Música": [
    "https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=800&h=600&fit=crop"
  ],
  "Saúde e Fitness": [
    "https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1574680096145-d05b474e2155?w=800&h=600&fit=crop"
  ],
  "Culinária": [
    "https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1466637574441-749b8f19452f?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1547592180-85f173990554?w=800&h=600&fit=crop",
    "https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&h=600&fit=crop"
  ]
};

export const courses: Course[] = Array.from({ length: 117 }, (_, i) => {
  const categoryIndex = i % categories.length;
  const courseNumber = i + 1;
  const category = categories[categoryIndex];
  const imageIndex = Math.floor(i / categories.length) % categoryImages[category].length;
  
  return {
    id: courseNumber,
    title: `Curso Profissional de ${category} ${Math.floor(i / categories.length) + 1}`,
    category: category,
    description: `Aprenda tudo sobre ${category} do básico ao avançado com metodologia comprovada e certificado incluso.`,
    price: 19.90,
    image: categoryImages[category][imageIndex],
    hotmartLink: `https://pay.hotmart.com/SEU_PRODUTO_${courseNumber}`,
    featured: i < 8,
    topics: [
      `Módulo 1: Introdução ao ${category}`,
      `Módulo 2: Conceitos Fundamentais`,
      `Módulo 3: Técnicas Avançadas`,
      `Módulo 4: Projetos Práticos`,
      `Módulo 5: Certificação`,
      `Bônus: Material de Apoio Exclusivo`
    ]
  };
});
