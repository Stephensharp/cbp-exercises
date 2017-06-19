SELECT song.id, song.name, song.released, author.name
FROM song
INNER JOIN author
ON song.author_id=author.id
WHERE song.name='rocky mountain high';