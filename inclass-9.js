function includesPinecone(str) {
  return str.includes("pinecone");
}

const sentences = [
   "I went to the forest to go chop down some trees.",
   "I went to the forest and I saw a Bear.",
   "I went to the forest and picked up a pinecone."
];

const filteredSentences = sentences.filter(includesPinecone);
console.log(filteredSentences);