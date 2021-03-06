ALTER TABLE [#__associations] DROP CONSTRAINT [PK_#__associations_context];
ALTER TABLE [#__associations] ALTER COLUMN [id] INT NOT NULL;
ALTER TABLE [#__associations] ADD CONSTRAINT [PK_#__associations_context] PRIMARY KEY CLUSTERED(
	[context] ASC,
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY];
